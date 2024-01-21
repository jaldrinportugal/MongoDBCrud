<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class attendees extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'attendees';

    protected $fillable = [
        'Attendees', 'Phone'
    ];

    protected $guarded = [];

    public function saveAttendees($data){
        return $this->create($data);
    }

    protected $fillables = ['Attendees', 'Phone'];

    public function getAttendees(){
        return $this->all();
    }
    public function deleteAttendees($id){
        $attendees = $this->find($id);
        $attendees->delete();
    }
    public function updateAttendees($id){
        return $this->findorfail($id);
    }
    public function updatedAttendees($data, $id){
        $attendees = $this->find($id);
        $attendees->update($data);
    }
}
