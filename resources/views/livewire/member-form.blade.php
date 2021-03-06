<div id="form-create" class=" card p-4">
    <form wire:submit.prevent="{{ $action }}">

        <x-input type="text" title="Nama" model="member.name"/>

        <x-select :options="$optionDivision" :selected="$member['division']" title="Divisi" model="member.division"/>

        <x-input type="text" title="Posisi" model="member.position"/>
        <x-input type="text" title="Instagram" model="member.instagram"/>
        <x-input type="text" title="Linkedin" model="member.linkedin"/>

        <x-input type="file" title="Foto" model="thumbnail"/>
        <div wire:loading wire:target="thumbnail">
            Proses upload, harap tunggu hingga gambar tertampilkan
        </div>
        @if($action=='create')
            @if($thumbnail)
                <img src="{{$thumbnail->temporaryUrl()}}" alt="" style="max-height: 300px; margin-bottom: 20px">
            @endif
        @else
            @if($thumbnail)
                <img src="{{$thumbnail->temporaryUrl()}}" alt="" style="max-height: 300px; margin-bottom: 20px">
            @else
                <img src="{{ asset('storage/img/member/'.$this->member['thumbnail']) }}" alt="" style="max-height: 300px; margin-bottom: 20px">
            @endif
        @endif

        <div class="form-group col-span-6 sm:col-span-5"></div>
        <button type="submit" id="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

<script>
    document.addEventListener('livewire:load', function () {
        window.livewire.on('redirect', () => {
            setTimeout(function () {
                window.location.href = "{{route('admin.member.index')}}"; //will redirect to your blog page (an ex: blog.html)
            }, 2000); //will call the function after 2 secs.
        });
    });
</script>
