<?PHP

namespace app\models;
use illuminate\database\ elocuent\factories\hasFactory;
use illuminate\foundation\Auth\user as authenticatable;
use illuminate\notifications\notificable;
use laravel\sanctum\HasApiTokens;

class User extends Authenticatetable
{
    use HasApiTokens, HasFactory, notifiable;
@var array<int>
protected $fillable = [
'name',
'email',
'password',
];

}
