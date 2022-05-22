<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Tag;
use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormBlog extends Component
{
    use WithFileUploads;
    public $dataId;
    public $action;
    public $blog;
    public $thumbnail;
    // public $blogCategory;
    public $optionCategory;
    public $optionStatus;

    protected $rules = [
        'blog.title' => 'required|max:255',
        'blog.contents' => 'required',
        'thumbnail' => 'image',
    ];

    public function mount()
    {
        $this->blog['contents'] = '';
        $this->blog['status'] = 'Drafted';
        $this->blog['tag_id'] = '1';
        $this->blog['user_id'] = Auth::id();
        // $this->blogCategory= [];
        // $this->optionCategory = eloquent_to_options(Tag::get(), 'id', 'title');
        $this->optionCategory =  [['value'=>'1','title'=>'Pengumuman'],
        ['value'=>'2','title'=>'Informasi']];
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
                'thumbnail'=> $m->thumbnail,
                'tag_id'=>$m->tag_id,
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
        // @dd($this->blog);
        $this->validate();
        
        $this->blog['thumbnail'] = md5(rand()).'.'.$this->thumbnail->getClientOriginalExtension();
        $this->thumbnail->storeAs('public/img/blog/', $this->blog['thumbnail']);
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
        if ($this->thumbnail!=NULL) {
            $this->blog['thumbnail'] ??= md5(rand()).'.'.$this->thumbnail->getClientOriginalExtension();
            $this->thumbnail->storeAs('public/img/blog/', $this->blog['thumbnail']);
        }
        
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
