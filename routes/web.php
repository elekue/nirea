<?php

use App\Models\Playlist;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PodcastController;


Route::get('/', [PlaylistController::class, 'index'] )->name('playlists.index');
Route::get('playlists', [PlaylistController::class, 'index'] )->name('playlists.index');
Route::get('playlists/songs/{playlist}', [PlaylistController::class, 'songs'] )->name('playlists.songs');
Route::get('playlists/playlistssongs', [PlaylistController::class, 'playlistssongs'] )->name('playlists.playlistssongs');

Route::get('songs/bilatu', [SongController::class, 'bilatu'] )->name('songs.bilatu');

Route::get('podcasts/', [PodcastController::class, 'index'] )->name('podcasts.index');
Route::get('podcasts/login', [PodcastController::class, 'login'] )->name('podcasts.login');
