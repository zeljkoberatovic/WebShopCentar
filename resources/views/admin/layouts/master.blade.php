
@vite('resources/css/app.css')

   
  <div class="page">
        <!-- Navbar -->
        @include('admin.layouts.header')
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        
        <div class="page-wrapper">
          
          @yield('content')

        <!-- Footer -->
        @include('admin.layouts.footer')    
        </div>
    </div>
<!--nova prodavnica
    <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">New report</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
            </div>
            <label class="form-label">Report type</label>
            <div class="form-selectgroup-boxes row mb-3">
              <div class="col-lg-6">
                <label class="form-selectgroup-item">
                  <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
                  <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">Simple</span>
                      <span class="d-block text-secondary">Provide only basic data needed for the report</span>
                    </span>
                  </span>
                </label>
              </div>
              <div class="col-lg-6">
                <label class="form-selectgroup-item">
                  <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                  <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">Advanced</span>
                      <span class="d-block text-secondary">Insert charts and additional advanced analyses to be inserted in the report</span>
                    </span>
                  </span>
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="mb-3">
                  <label class="form-label">Report url</label>
                  <div class="input-group input-group-flat">
                    <span class="input-group-text">
                      https://tabler.io/reports/
                    </span>
                    <input type="text" class="form-control ps-0"  value="report-01" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-3">
                  <label class="form-label">Visibility</label>
                  <select class="form-select">
                    <option value="1" selected>Private</option>
                    <option value="2">Public</option>
                    <option value="3">Hidden</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Client name</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Reporting period</label>
                  <input type="date" class="form-control">
                </div>
              </div>
              <div class="col-lg-12">
                <div>
                  <label class="form-label">Additional information</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
              Cancel
            </a>
            <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
              Create new report
            </a>
          </div>
        </div>
      </div>
    </div>-->
    <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Kreiraj novu prodavnicu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zatvori"></button>
          </div>
          <div class="modal-body">
            <!-- Ime prodavnice -->
            <div class="mb-3">
              <label class="form-label">Ime prodavnice</label>
              <input type="text" class="form-control" name="store-name" placeholder="Unesite ime prodavnice" required>
            </div>
    
            <!-- Opis prodavnice -->
            <div class="mb-3">
              <label class="form-label">Opis prodavnice</label>
              <textarea class="form-control" name="store-description" rows="4" placeholder="Unesite pravni opis prodavnice" required></textarea>
            </div>
    
            <!-- Vlasnik prodavnice -->
            <div class="mb-3">
              <label class="form-label">Ime vlasnika prodavnice</label>
              <input type="text" class="form-control" name="store-owner" placeholder="Unesite ime vlasnika prodavnice" required>
            </div>
    
            <!-- Polje za upload loga -->
            <div class="mb-3">
              <label class="form-label">Logo prodavnice</label>
              <input type="file" class="form-control" name="store-logo" accept="image/*" required>
            </div>
    
            <!-- Vrsta prodavnice -->
            <label class="form-label">Vrsta prodavnice</label>
            <div class="form-selectgroup-boxes row mb-3">
              <div class="col-lg-6">
                <label class="form-selectgroup-item">
                  <input type="radio" name="store-type" value="1" class="form-selectgroup-input" checked>
                  <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">Fizička prodavnica</span>
                      <span class="d-block text-secondary">Prodavnica koja se nalazi na fizičkoj lokaciji.</span>
                    </span>
                  </span>
                </label>
              </div>
              <div class="col-lg-6">
                <label class="form-selectgroup-item">
                  <input type="radio" name="store-type" value="2" class="form-selectgroup-input">
                  <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">Online prodavnica</span>
                      <span class="d-block text-secondary">Prodavnica koja funkcioniše samo putem interneta.</span>
                    </span>
                  </span>
                </label>
              </div>
            </div>
    
            <!-- URL prodavnice -->
            <div class="row">
              <div class="col-lg-8">
                <div class="mb-3">
                  <label class="form-label">URL prodavnice</label>
                  <div class="input-group input-group-flat">
                    <span class="input-group-text">
                      https://moja-prodavnica.com/
                    </span>
                    <input type="text" class="form-control ps-0" value="prodavnica-01" name="store-url" autocomplete="off" required>
                  </div>
                </div>
              </div>
    
              <!-- Vidljivost prodavnice -->
              <div class="col-lg-4">
                <div class="mb-3">
                  <label class="form-label">Vidljivost</label>
                  <select class="form-select" name="store-visibility">
                    <option value="1" selected>Privatna</option>
                    <option value="2">Javna</option>
                    <option value="3">Skrivena</option>
                  </select>
                </div>
              </div>
            </div>
    
            <!-- Dodatne informacije -->
            <div class="row">
              <div class="col-lg-12">
                <div>
                  <label class="form-label">Dodatne informacije</label>
                  <textarea class="form-control" rows="3" name="additional-info"></textarea>
                </div>
              </div>
            </div>
          </div>
    
          <!-- Dugmadi za akciju -->
          <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
              Otkaži
            </a>
            <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
              <!-- Ikonica plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 5l0 14" />
                <path d="M5 12l14 0" />
              </svg>
              Kreiraj novu prodavnicu
            </button>
          </div>
        </div>
      </div>
    </div>
    
    
    

@vite('resources/js/app.js')
    
