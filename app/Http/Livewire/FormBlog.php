<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use App\Models\Tag;
use App\Models\Blog;
use Livewire\Component;

class FormBlog extends Component
{

    public $dataId;
    public $action;
    public $blog;
    public $blogCategory;
    public $optionCategory;
    public $optionStatus;

    protected $rules = [
        'blog.title' => 'required|min:6',
    ];

    public function mount()
    {
        $this->blog['contents'] = '';
        $this->blog['status'] = 'Drafted';
        $this->blogCategory= [];
        $this->optionCategory = eloquent_to_options(Tag::get(), 'id', 'title');
        $this->optionStatus=[
            ['value'=>'Published','title'=>'Published'],
            ['value'=>'Drafted','title'=>'Drafted'],
        ];

        if ($this->dataId!=''){
            $m = Blog::findOrFail($this->dataId);
            $this->blog=[
                'title'=>$m->title,
                'slug'=>$m->slug,
                'status'=>$m->status,
                'contents'=>$m->contents
            ];
        }
    }

    public function render()
    {
        return view('livewire.form-blog');
    }

    public function create()
    {
        $this->validate();
        $this->blogCategory = collect($this->blogCategory)->map(function($i){
            switch ($i) {
                case "1":
                    return "Informasi";
                    break;
                case "2":
                    return "Pengumuman";
                    break;
                case "3":
                    return "Info Lomba";
                    break;
                default:
                    return "Uncategorized";
            }
        });
        $this->blog['category'] = $this->blogCategory;
        $this->blog['slug'] = Str::of($this->blog['title'])->slug('-');
        // dd($this->blog);
        Blog::create($this->blog);

        $this->emit('swal:alert', [
            'type'    => 'success',
            'title'   => 'Data berhasil masuk',
            'timeout' => 2000,
            'icon'=>'success'
        ]);
        $this->emit('redirect');
    }

    public function update() {
        Blog::find($this->dataId)->update($this->blog);

        $this->emit('swal:alert', [
            'type'    => 'success',
            'title'   => 'Data berhasil update',
            'timeout' => 3000,
            'icon'=>'success'
        ]);
        $this->emit('redirect');
    }

}
