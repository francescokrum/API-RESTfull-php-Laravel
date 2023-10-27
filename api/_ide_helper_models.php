<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Livro
 *
 * @property int $id
 * @property string $titulo
 * @property string $autor
 * @property int $classificacao
 * @property string $resenha
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Livro newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Livro newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Livro query()
 * @method static \Illuminate\Database\Eloquent\Builder|Livro whereAutor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Livro whereClassificacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Livro whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Livro whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Livro whereResenha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Livro whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Livro whereUpdatedAt($value)
 */
	class Livro extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property mixed $password
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

