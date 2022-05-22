<?php


namespace App\Http\Livewire;


use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class SearchStudent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $cari='';
    public $student;

    public function searching(){
        $this->student=Student::class;
        return Student::searchFront($this->cari);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $students = $this->cari === '' ? Student::latest() : $this->searching();
        // @dd($students);
        return view('livewire.search-student',['students' => $students->paginate(6)]);
    }

}
