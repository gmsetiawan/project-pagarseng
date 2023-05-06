<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XXX extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'nik',
        'nama',
        'alamat',
        'rt',
        'kelurahan',
        'kecamatan',
        'scanktp',
        'nohp',
        'keterangan',
        'location_id',
        'emoployee_id',
        'user_id'
    ];

    /**
     * Get the user that owns the Member
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the employee that owns the Member
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    /**
     * Get the employee that owns the Member
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }


    public function children()
    {
        return $this->hasMany(Member::class, 'parent_id');
    }
}
