<div id="form-create" class=" card p-4">
    <form wire:submit.prevent="{{ $action }}">
       <x-input type="text" title="Judul" model="blog.title"/>
       {{--  <x-date type="text" title="title" model="blog.title" type="datetimepicker"/>--}}

{{--        {{$blog['time']}}--}}
{{-- <x-time title="sa" model="blog.time" :time="$blog['time']"/>--}}

        {{-- <x-daterange title="sa" model="blog.timeaaa" />--}}
        <x-select2 :options="$optionCategory" :selected="$blogCategory" title="Kategori" model="blogCategory"/>

        <x-select :options="$optionStatus" :selected="$blog['status']" title="Status" model="blog.status"/>

        <x-summernote title="contents" model="blog.contents"/>

        

        <div class="form-group col-span-6 sm:col-span-5"></div>
        <button type="submit" id="submit" class="btn btn-primary">Submit</button>

    </form>
    {{--    console.log({{$data['content']}})--}}

</div>
<script>
    document.addEventListener('livewire:load', function () {
        window.livewire.on('redirect', () => {
            setTimeout(function () {
                window.location.href = "{{route('admin.blog.index')}}"; //will redirect to your blog page (an ex: blog.html)
            }, 2000); //will call the function after 2 secs.
        });
    });
</script>
