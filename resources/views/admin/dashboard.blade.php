
@extends('admin.layouts.master')

@section('content')



<x-alert-messages />



<!-- Uključivanje forme za kreiranje prodavnice -->

@include('admin.stores.create')

 

      <!-- Page header -->
      <div class="page-header d-print-none">
          <div class="container-xl">
              <div class="row g-2 align-items-center">
                  <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                      <!-- Overview -->
                    </div>
                    <h2 class="page-title">
                      Admin Dashboard
                    </h2>
                  </div>

                  <!-- Page title actions-->
                    <div class="col-auto ms-auto d-print-none">
                      <div class="btn-list">
                         
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                          <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                          Nova Prodavnica
                        </a>
                        <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                          <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                    
            

         



             
              


            <!-- Page body -->
            <div class="page-body">
              <div class="container-xl">
                <div class="row row-deck row-cards">
                  <div class="col-sm-6 col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="subheader">Plate</div>
                          <div class="ms-auto lh-1">
                            <div class="dropdown">
                              <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item active" href="#">Last 7 days</a>
                                <a class="dropdown-item" href="#">Last 30 days</a>
                                <a class="dropdown-item" href="#">Last 3 months</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="h1 mb-3">75%</div>
                        <div class="d-flex mb-2">
                          <div>Conversion rate</div>
                          <div class="ms-auto">
                            <span class="text-green d-inline-flex align-items-center lh-1">
                              7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                            </span>
                          </div>
                        </div>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                            <span class="visually-hidden">75% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="subheader">Prihod</div>
                          <div class="ms-auto lh-1">
                            <div class="dropdown">
                              <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item active" href="#">Poslednjih 7 dana</a>
                                <a class="dropdown-item" href="#">Poslednjih 30 dana</a>
                                <a class="dropdown-item" href="#">Poslednja 3 mjeseca</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-baseline">
                          <div class="h1 mb-0 me-2">$4,300</div>
                          <div class="me-auto">
                            <span class="text-green d-inline-flex align-items-center lh-1">
                              8% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div id="chart-revenue-bg" class="chart-sm"></div>
                    </div>
                  </div>

                  <!-- New clients -->
                  <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Novi Korisnici</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-secondary" href="#" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Poslednjih 7 dana</a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" onclick="updateData('7')">Poslednjih 7 dana</a>
                                            <a class="dropdown-item" href="#" onclick="updateData('30')">Poslednjih 30 dana</a>
                                            <a class="dropdown-item" href="#" onclick="updateData('90')">Poslednja 3 mjeseca</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Prikaz broja novih korisnika i procentualne promene -->
                            <div class="d-flex align-items-baseline">
                                <div id="newClientsCount" class="h1 mb-3 me-2">{{ $data['newClientsLast7Days'] }}</div>
                                <div class="me-auto">
                                    <span id="percentChange" class="text-yellow d-inline-flex align-items-center lh-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M5 12l14 0" />
                                        </svg>
                                        {{ number_format($data['percentChange7Days'], 2) }}%
                                    </span>
                                </div>
                            </div>
                
                            <div id="chart-new-clients" class="chart-sm"></div>
                        </div>
                    </div>
                </div>
      
      
      <!--aktivni korisnici-->
      <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="subheader">Aktivni korisnici</div>
                <div class="ms-auto lh-1">
                  <div class="dropdown">
                    <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item active" href="#">Last 7 days</a>
                      <a class="dropdown-item" href="#">Last 30 days</a>
                      <a class="dropdown-item" href="#">Last 3 months</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-baseline">
                <div class="h1 mb-3 me-2">2,986</div>
                <div class="me-auto">
                  <span class="text-green d-inline-flex align-items-center lh-1">
                    4% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                  </span>
                </div>
              </div>
              <div id="chart-active-users" class="chart-sm"></div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="row row-cards">
            <div class="col-sm-6 col-lg-3">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" /><path d="M12 3v3m0 12v3" /></svg>
                      </span>
                    </div>
                    <div class="col">
                      <div class="font-weight-medium">
                        132 Sales
                      </div>
                      <div class="text-secondary">
                        12 waiting payments
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-3">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                      </span>
                    </div>
                    <div class="col">
                      <div class="font-weight-medium">
                        78 Orders
                      </div>
                      <div class="text-secondary">
                        32 shipped
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-3">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" /></svg>
                      </span>
                    </div>
                    <div class="col">
                      <div class="font-weight-medium">
                        623 Shares
                      </div>
                      <div class="text-secondary">
                        16 today
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-3">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="bg-facebook text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                      </span>
                    </div>
                    <div class="col">
                      <div class="font-weight-medium">
                        132 Likes
                      </div>
                      <div class="text-secondary">
                        21 today
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Lista Korisnika - Pretraga -->
            <div class="col-lg-12">
              <div class="card">
                  <div class="card-header border-0 d-flex align-items-center justify-content-between">
                      <h3 class="card-title m-0" style="font-size: 1.3rem;">Lista korisnika</h3>

                      <!-- Forma za pretragu korisnika -->
                      <form id="search-form" method="GET" action="{{ route('admin.search') }}">
                          <div class="input-group">
                              <input type="text" id="search-name" name="name" class="form-control" placeholder="Ime korisnika" value="{{ request('name') }}">
                              <input type="text" id="search-email" name="email" class="form-control" placeholder="Email" value="{{ request('email') }}">
                              <button type="submit" class="btn btn-primary">Filtriraj</button>
                          </div>
                      </form>
                  </div>

                  <div class="card-body">
                      <!-- Ako nema korisnika, prikaži poruku -->
                      @if ($noUsersFound)
                          <div class="alert alert-warning">
                              Nema korisnika koji odgovaraju pretrazi.
                              <a href="javascript:void(0);" onclick="window.history.back();">Vrati se nazad</a>
                          </div>
                      @endif

                      <!-- Tabela korisnika -->
                      <div class="table-responsive">
                          <table class="table table-striped table-hover align-middle">
                              <thead class="table-light">
                                  <tr>
                                      <th>#</th>
                                      <th>Ime</th>
                                      <th>Email</th>
                                      <th>Role</th>
                                      <th>Datum registracije</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach ($users as $user)
                                      <tr>
                                          <td>{{ $loop->iteration }}</td>
                                          <td><a href="{{ route('admin.users.show', $user->id) }}">{{ $user->name }}</a></td>
                                          <td>{{ $user->email }}</td>
                                          <td>{{ ucfirst($user->role) }}</td>
                                          <td class="text-nowrap text-secondary">{{ $user->created_at->format('d M Y') }}</td>
                                      </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </div>

                      <!-- Paginate -->
                      <x-pagination :paginator="$users" />
                      
                  </div>
              </div>
            </div>


        
       


        

            
        


          
        

         

            @include('admin.stores.index')
       
       
       
        
      </div>
     
      <script>
        function updateData(period) {
            let newClientsCount = 0;
            let percentChange = 0;
            let periodText = '';
    
            //  Prema periodu
            if (period === '7') {
                newClientsCount = {{ $data['newClientsLast7Days'] }};
                percentChange = {{ number_format($data['percentChange7Days'], 2) }};
                periodText = 'Poslednjih 7 dana';
            } else if (period === '30') {
                newClientsCount = {{ $data['newClientsLast30Days'] }};
                percentChange = {{ number_format($data['percentChange30Days'], 2) }};
                periodText = 'Poslednjih 30 dana';
            } else if (period === '90') {
                newClientsCount = {{ $data['newClientsLast3Months'] }};
                percentChange = {{ number_format($data['percentChange3Months'], 2) }};
                periodText = 'Poslednja 3 meseca';
            }
    
            // Ažurira podatke na stranici
            document.getElementById('newClientsCount').innerText = newClientsCount;
            document.getElementById('percentChange').innerText = percentChange + '%';
    
            // Menja tekst u dropdownu
            document.getElementById('dropdownMenuButton').innerText = periodText;
        }
    
        document.addEventListener('DOMContentLoaded', function() {
            const searchName = document.getElementById('search-name');
            const searchEmail = document.getElementById('search-email');
    
            if (searchName && searchEmail) {
                // Event listener za pretragu po imenu i email-u
                function handleSearch() {
                    let name = searchName.value.trim();
                    let email = searchEmail.value.trim();
    
                    // Provera da li su oba polja prazna
                    if (name === '' && email === '') {
                        return;  // Ako su oba prazna, ne šaljemo zahtev
                    }
    
                    // Slanje AJAX zahteva za filtriranje
                    fetch('/admin/dashboard?name=' + name + '&email=' + email)
                        .then(response => response.json())
                        .then(data => {
                            updateUserTable(data.users);
                        })
                        .catch(error => console.error('Greška pri pretrazi:', error));
                }
    
                // Dodeljivanje event listener-a za oba polja (ime i email)
                searchName.addEventListener('input', handleSearch);
                searchEmail.addEventListener('input', handleSearch);
            }
        });
    </script>

    
    






@endsection