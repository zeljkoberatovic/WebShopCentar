
 <!--Kreiranje prodavnice-->
 <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Kreiraj novu prodavnicu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zatvori"></button>
        </div>

        <!-- Forma za kreiranje prodavnice -->
        <form action="{{ route('admin.stores.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
              <!-- Ime prodavnice -->
              <div class="mb-3">
                  <label class="form-label">Ime prodavnice</label>
                  <input type="text" class="form-control" name="name" placeholder="Unesite ime prodavnice" required>
              </div>

              <!-- Lokacija prodavnice -->
                <div class="mb-3">
                  <label class="form-label">Lokacija prodavnice</label>
                  <input type="text" class="form-control" name="location" placeholder="Unesite lokaciju prodavnice" >
                </div>

          
              <!-- Opis prodavnice -->
              <div class="mb-3">
                  <label class="form-label">Opis prodavnice</label>
                  <textarea class="form-control" name="description" rows="4" placeholder="Unesite opis prodavnice" required></textarea>
              </div>
          
              <!-- Polje za upload loga (nije obavezno) -->
                  <div class="mb-3">
                    <label class="form-label">Logo prodavnice</label>
                    <input type="file" class="form-control" name="logo" accept="image/jpeg,image/png,image/jpg,image/gif">
                    <small class="form-text text-muted">Dozvoljeni formati: JPEG, PNG, JPG, GIF. Maksimalna veličina: 4MB.</small>
                  </div>

          
              <!-- Vrsta prodavnice -->
              <label class="form-label">Vrsta prodavnice</label>
              <div class="form-selectgroup-boxes row mb-3">
                  <div class="col-lg-6">
                      <label class="form-selectgroup-item">
                          <input type="radio" name="type" value="physical" class="form-selectgroup-input" checked>
                          <span class="form-selectgroup-label d-flex align-items-center p-3">
                              <span class="form-selectgroup-label-content">
                                  <span class="form-selectgroup-title strong mb-1">Fizička prodavnica</span>
                                  <span class="d-block text-secondary">Prodavnica sa fizičkom lokacijom.</span>
                              </span>
                          </span>
                      </label>
                  </div>
                  <div class="col-lg-6">
                      <label class="form-selectgroup-item">
                          <input type="radio" name="type" value="online" class="form-selectgroup-input">
                          <span class="form-selectgroup-label d-flex align-items-center p-3">
                              <span class="form-selectgroup-label-content">
                                  <span class="form-selectgroup-title strong mb-1">Online prodavnica</span>
                                  <span class="d-block text-secondary">Prodavnica koja funkcioniše samo putem interneta.</span>
                              </span>
                          </span>
                      </label>
                  </div>
              </div>
          
              <!-- URL prodavnice -->
              <div class="mb-3">
                  <label class="form-label">URL prodavnice</label>
                  <div class="input-group input-group-flat">
                      <span class="input-group-text">https://moja-prodavnica.com/</span>
                      <input type="text" class="form-control" name="url" placeholder="Unesite URL prodavnice" required>
                  </div>
              </div>
          
              <!-- Vidljivost prodavnice -->
              <div class="mb-3">
                  <label class="form-label">Vidljivost</label>
                  <select class="form-select" name="visibility">
                      <option value="private" selected>Privatna</option>
                      <option value="public">Javna</option>
                      <option value="hidden">Skrivena</option>
                  </select>
              </div>

              <!-- Status prodavnice -->
                <div class="mb-3">
                  <label class="form-label">Status</label>
                  <select class="form-select" name="status" required>
                      <option value="active" selected>Aktivna</option>
                      <option value="inactive">Neaktivna</option>
                  </select>
                </div>

          
              <!-- Dodatne informacije -->
              <div class="mb-3">
                  <label class="form-label">Dodatne informacije</label>
                  <textarea class="form-control" rows="3" name="additional_info"></textarea>
              </div>

              <!-- Vlasnik prodavnice -->
                    <div class="mb-3">
                        <label class="form-label">Vlasnik prodavnice</label>
                        <select class="form-select" name="user_id" required>
                            <option value="">Izaberite vlasnika</option>
                            @foreach($users as $user)
                                @if($user->store) <!-- Ako korisnik već ima prodavnicu, ne prikazuj ga -->
                                    <!-- Ovaj korisnik neće biti prikazan -->
                                @else
                                    <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

          </div>
          
            <!-- Dugme za akciju -->
          <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
              Otkaži
            </a>
            <button type="submit" class="btn btn-primary ms-auto">
              <!-- Ikonica plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 5l0 14" />
                <path d="M5 12l14 0" />
              </svg>
              Kreiraj novu prodavnicu
            </button>
          </div>
        </form>
      </div>
    </div>
</div>

