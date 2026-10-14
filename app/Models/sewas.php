<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class sewas extends Model
{
use HasFactory;
protected $fillable = [
'waktu_sewa', 'pengembalian_sewa',
];
protected function casts(): array
{

}
}
