<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class Main extends Component
{
    use WithPagination;

    public $model;
    public $name;

    public $perPage = 10;
    public $sortField = "id";
    public $sortAsc = false;
    public $search = '';

    protected $listeners = [ "deleteItem" => "delete_item" ];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function get_pagination_data ()
    {
        switch ($this->name) {
            case 'user':
                $users = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                return [
                    "view" => 'livewire.table.user',
                    "users" => $users,
                    "data" => array_to_object([
                        'href' => [
                            'create_new' => route('admin.user.new'),
                            'create_new_text' => 'Buat User Baru',
                            'export' => '#',
                            'export_text' => 'Export'
                        ]
                    ])
                ];
                break;

            case 'blog':
                $blogs = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                return [
                    "view" => 'livewire.table.blog',
                    "blogs" => $blogs,
                    "data" => array_to_object([
                        'href' => [
                            'create_new' => route('admin.blog.create'),
                            'create_new_text' => 'Buat Blog Baru',
                            'export' => '#',
                            'export_text' => 'Export'
                        ]
                    ])
                ];
                break;
        
            case 'member':
                $members = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                return [
                    "view" => 'livewire.table.member',
                    "members" => $members,
                    "data" => array_to_object([
                        'href' => [
                            'create_new' => route('admin.member.create'),
                            'create_new_text' => 'Buat Member Baru',
                            'export' => '#',
                            'export_text' => 'Export'
                        ]
                    ])
                ];
                break;

            case 'student':
                $students = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                return [
                    "view" => 'livewire.table.student',
                    "students" => $students,
                    "data" => array_to_object([
                        'href' => [
                            'create_new' => route('admin.student.create'),
                            'create_new_text' => 'Buat Mahasiswa Baru',
                            'export' => '#',
                            'export_text' => 'Export'
                        ]
                    ])
                ];
                break;

            case 'studentDetail':
                $studentDetails = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                return [
                    "view" => 'livewire.table.student-detail',
                    "studentDetails" => $studentDetails,
                    "data" => array_to_object([
                        'href' => [
                            'create_new' => route('admin.student.create'),
                            'create_new_text' => 'Buat Mahasiswa Baru',
                            'export' => '#',
                            'export_text' => 'Export'
                        ]
                    ])
                ];
                break;

            case 'offense':
                $offenses = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                return [
                    "view" => 'livewire.table.offense',
                    "offenses" => $offenses,
                    "data" => array_to_object([
                        'href' => [
                            'create_new' => route('admin.offense.create'),
                            'create_new_text' => 'Buat Jenis Pelanggaran',
                            'export' => '#',
                            'export_text' => 'Export'
                        ]
                    ])
                ];
                break;

            case 'addition':
                $additions = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                return [
                    "view" => 'livewire.table.addition',
                    "additions" => $additions,
                    "data" => array_to_object([
                        'href' => [
                            'create_new' => route('admin.addition.create'),
                            'create_new_text' => 'Buat Jenis Kepatuhan',
                            'export' => '#',
                            'export_text' => 'Export'
                        ]
                    ])
                ];
                break;

            default:
                # code...
                break;
        }
    }

    public function delete_item ($id)
    {
        $data = $this->model::find($id);

        if (!$data) {
            $this->emit("deleteResult", [
                "status" => false,
                "message" => "Gagal menghapus data " . $this->name
            ]);
            return;
        }
        if($data->thumbnail != NULL){
            Storage::delete('public/img/blog/'.$data->thumbnail);
            Storage::delete('public/img/member/'.$data->thumbnail);
        }

        $data->delete();
        $this->emit("deleteResult", [
            "status" => true,
            "message" => "Data " . $this->name . " berhasil dihapus!"
        ]);
    }

    public function render()
    {
        $data = $this->get_pagination_data();

        return view($data['view'], $data);
    }
}
