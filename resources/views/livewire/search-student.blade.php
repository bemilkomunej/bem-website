<section id="team" class="team">
    <div class="container">
        <header class="section-header">
            <h2>PPMB</h2>
            <p>Cek Point PPMB</p>
        </header>
        <div class="search">
            <div class="search-bar">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <input wire:model="cari" class="col-lg-10 form-control" type="text" name="search" placeholder="Cari Nama atau NIM">
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-4 justify-content-center">
            @foreach($students as $c)
            <div class="col-lg-2 col-md-3 col-sm-6 d-flex align-items-stretch" data-toggle="tooltip" title="{{ $c->name }}">

                    <div class="member">
                    <a href="/ppmb/{{ $c->nim }}">
                        <div class="member-img">
                            <img src="https://spesialis1.orthopaedi.fk.unair.ac.id/wp-content/uploads/2021/02/depositphotos_39258143-stock-illustration-businessman-avatar-profile-picture.jpg" class="img-fluid" alt="{{ $c->name }}">
                            <!-- <div class="social">
                        <a href="https://instagram.com/bemilkomunej"><i class="bi bi-instagram"></i></a>
                        <a href="https://linkedin.com/company/bemilkom"><i class="bi bi-linkedin"></i></a>
                    </div> -->
                        </div>
                        <div class="member-info">
                            <h4 class="text-truncate">{{ $c->name }}</h4>
                            <span>{{ $c->nim }}</span>
                        </div>
                        </a>
                    </div>

            </div>
            @endforeach
            <!-- {{$students->links()}} -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-2 text-center">
                        {{$students->links()}}
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
