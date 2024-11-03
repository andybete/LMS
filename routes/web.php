<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookBorrowController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

// Authenticated routes
Route::middleware('auth')->group(function () {
    // Book routes
    Route::middleware('librarian')->group(function () {
        Route::controller(BookController::class)->group(function () {
            // Add book
            Route::get('/books/create', 'create')->name('books.create');
            Route::post('/books', 'store')->name('books.store');

            // Update book
            Route::get('/books/{book}/edit', 'edit')->name('books.edit')->can('update', 'book');
            Route::put('/books/{book}', 'update')->name('books.update')->can('update', 'book');

            // Delete book
            Route::delete('/books/{book}', 'destroy')->name('books.destroy')->can('delete', 'book');
        });

        // Librarian-specific routes
        Route::get('/librarian', [LibrarianController::class, 'borrowedBooks'])->name('librarian.borrowed_books');
    });

    // Borrowing routes
    Route::post('/books/{book}/borrow', [BookBorrowController::class, 'borrowBook'])->name('books.borrow');
    Route::post('/borrowed-books/{id}/return', [BookBorrowController::class, 'markAsReturned'])->name('borrowed-books.return'); // Ensure consistency

    // Log Out
    Route::delete('/logout', [SessionController::class, 'destroy'])->name('logout');

    // Protected book routes
    Route::controller(BookController::class)->group(function () {
        Route::get('/books', 'index')->name('books.index'); // Move this inside the auth middleware
        Route::get('/books/{book}', 'show')->name('books.show'); // Move this too
    });
});

// Guest routes
Route::middleware('guest')->group(function () {
    // Register
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    // Log In
    Route::get('/login', [SessionController::class, 'login'])->name('login');
    Route::post('/login', [SessionController::class, 'store'])->name('login.store');
});

// Admin routes
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index')->middleware('admin')->name('admin');
});