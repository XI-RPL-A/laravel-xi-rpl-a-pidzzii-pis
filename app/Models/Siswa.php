<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Siswa as Authenticatable; use
Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Siswa extends Model //Definisi Model
{
    protected $table='siswa'; // Eloquent akan membuat model siswa menyimpan record di tabel siswa
    protected $primaryKey = 'id_siswa'; // Memanggil isi DB Dengan primarykey
/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
    'nis',
    'nama',
    'kelas',
    'jurusan',
    ];
};