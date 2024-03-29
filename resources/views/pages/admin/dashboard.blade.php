@extends('layouts.master_page.app')

@section('main-content')
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-8 d-flex align-items-strech">
            <x-card class="w-100">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-sm-0 mb-3">
                        <h5 class="card-title fw-semibold">Sales Overview</h5>
                    </div>
                    <div>
                        <select class="form-select">
                            <option value="1">March 2023</option>
                            <option value="2">April 2023</option>
                            <option value="3">May 2023</option>
                            <option value="4">June 2023</option>
                        </select>
                    </div>
                </div>
                <div id="chart"></div>
            </x-card>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Yearly Breakup -->
                    <x-card class="w-100 overflow-hidden">
                        <h5 class="card-title fw-semibold mb-9">Yearly Breakup</h5>
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="fw-semibold mb-3">$36,358</h4>
                                <div class="d-flex align-items-center mb-3">
                                    <span
                                        class="rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center me-1">
                                        <i class="ti ti-arrow-up-left text-success"></i>
                                    </span>
                                    <p class="text-dark fs-3 mb-0 me-1">+9%</p>
                                    <p class="fs-3 mb-0">last year</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="me-4">
                                        <span class="round-8 bg-primary rounded-circle d-inline-block me-2"></span>
                                        <span class="fs-2">2023</span>
                                    </div>
                                    <div>
                                        <span class="round-8 bg-light-primary rounded-circle d-inline-block me-2"></span>
                                        <span class="fs-2">2023</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex justify-content-center">
                                    <div id="breakup"></div>
                                </div>
                            </div>
                        </div>
                    </x-card>
                </div>
                <div class="col-lg-12">
                    <!-- Monthly Earnings -->
                    <x-card>
                        <div class="row alig n-items-start">
                            <div class="col-8">
                                <h5 class="card-title fw-semibold mb-9"> Monthly Earnings </h5>
                                <h4 class="fw-semibold mb-3">$6,820</h4>
                                <div class="d-flex align-items-center pb-1">
                                    <span
                                        class="rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center me-2">
                                        <i class="ti ti-arrow-down-right text-danger"></i>
                                    </span>
                                    <p class="text-dark fs-3 mb-0 me-1">+9%</p>
                                    <p class="fs-3 mb-0">last year</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex justify-content-end">
                                    <div
                                        class="bg-secondary rounded-circle d-flex align-items-center justify-content-center p-6 text-white">
                                        <i class="ti ti-currency-dollar fs-6"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <x-slot:subSlotBottom>
                            <div id="earning"></div>
                        </x-slot:subSlotBottom>
                    </x-card>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
            <x-card>
                <div class="mb-4">
                    <h5 class="card-title fw-semibold">Recent Transactions</h5>
                </div>
                <ul class="timeline-widget position-relative mb-n5 mb-0">
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                        <div class="timeline-time text-dark flex-shrink-0 text-end">09:30</div>
                        <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                            <span class="timeline-badge border-primary my-8 flex-shrink-0 border border-2"></span>
                            <span class="timeline-badge-border d-block flex-shrink-0"></span>
                        </div>
                        <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John
                            Doe
                            of $385.90</div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                        <div class="timeline-time text-dark flex-shrink-0 text-end">10:00 am</div>
                        <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                            <span class="timeline-badge border-info my-8 flex-shrink-0 border border-2"></span>
                            <span class="timeline-badge-border d-block flex-shrink-0"></span>
                        </div>
                        <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale
                            recorded
                            <a href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                        </div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                        <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                        <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                            <span class="timeline-badge border-success my-8 flex-shrink-0 border border-2"></span>
                            <span class="timeline-badge-border d-block flex-shrink-0"></span>
                        </div>
                        <div class="timeline-desc fs-3 text-dark mt-n1">Payment was made of $64.95
                            to
                            Michael</div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                        <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                        <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                            <span class="timeline-badge border-warning my-8 flex-shrink-0 border border-2"></span>
                            <span class="timeline-badge-border d-block flex-shrink-0"></span>
                        </div>
                        <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale
                            recorded
                            <a href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                        </div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                        <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                        <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                            <span class="timeline-badge border-danger my-8 flex-shrink-0 border border-2"></span>
                            <span class="timeline-badge-border d-block flex-shrink-0"></span>
                        </div>
                        <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New arrival
                            recorded
                        </div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                        <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                        <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                            <span class="timeline-badge border-success my-8 flex-shrink-0 border border-2"></span>
                        </div>
                        <div class="timeline-desc fs-3 text-dark mt-n1">Payment Done</div>
                    </li>
                </ul>
            </x-card>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch">
            <x-card class="w-100">
                <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
                <div class="table-responsive">
                    <table class="text-nowrap mb-0 table align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Id</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Assigned</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Name</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Priority</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Budget</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">1</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                                    <span class="fw-normal">Web Designer</span>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="fw-normal mb-0">Elite Admin</p>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-primary rounded-3 fw-semibold">Low</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold fs-4 mb-0">$3.9</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">2</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">Andrew McDownland</h6>
                                    <span class="fw-normal">Project Manager</span>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="fw-normal mb-0">Real Homes WP Theme</p>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-secondary rounded-3 fw-semibold">Medium</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold fs-4 mb-0">$24.5k</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">3</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">Christopher Jamil</h6>
                                    <span class="fw-normal">Project Manager</span>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="fw-normal mb-0">MedicalPro WP Theme</p>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-danger rounded-3 fw-semibold">High</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold fs-4 mb-0">$12.8k</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">4</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                                    <span class="fw-normal">Frontend Engineer</span>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="fw-normal mb-0">Hosting Press HTML</p>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-success rounded-3 fw-semibold">Critical</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold fs-4 mb-0">$2.4k</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </x-card>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card rounded-2 overflow-hidden">
                <div class="position-relative">
                    <a href="javascript:void(0)"><img src="{{ asset('assets/template/assets/images/products/s4.jpg') }}"
                            class="card-img-top rounded-0" alt="...">
                    </a>
                    <a href="javascript:void(0)"
                        class="bg-primary rounded-circle d-inline-flex position-absolute mb-n3 bottom-0 end-0 me-3 p-2 text-white"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                            class="ti ti-basket fs-4"></i>
                    </a>
                </div>
                <div class="card-body p-4 pt-3">
                    <h6 class="fw-semibold fs-4">Boat Headphone</h6>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="fw-semibold fs-4 mb-0">$50 <span
                                class="fw-normal text-muted fs-3 ms-2"><del>$65</del></span></h6>
                        <ul class="list-unstyled d-flex align-items-center mb-0">
                            <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                            <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                            <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                            <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                            <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card rounded-2 overflow-hidden">
                <div class="position-relative">
                    <a href="javascript:void(0)"><img src="{{ asset('assets/template/assets/images/products/s5.jpg') }}"
                            class="card-img-top rounded-0" alt="..."></a>
                    <a href="javascript:void(0)"
                        class="bg-primary rounded-circle d-inline-flex position-absolute mb-n3 bottom-0 end-0 me-3 p-2 text-white"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                            class="ti ti-basket fs-4"></i></a>
                </div>
                <div class="card-body p-4 pt-3">
                    <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="fw-semibold fs-4 mb-0">$650 <span
                                class="fw-normal text-muted fs-3 ms-2"><del>$900</del></span></h6>
                        <ul class="list-unstyled d-flex align-items-center mb-0">
                            <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                            <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                            <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                            <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                            <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card rounded-2 overflow-hidden">
                <div class="position-relative">
                    <a href="javascript:void(0)"><img src="{{ asset('assets/template/assets/images/products/s7.jpg') }}"
                            class="card-img-top rounded-0" alt="..."></a>
                    <a href="javascript:void(0)"
                        class="bg-primary rounded-circle d-inline-flex position-absolute mb-n3 bottom-0 end-0 me-3 p-2 text-white"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                            class="ti ti-basket fs-4"></i></a>
                </div>
                <div class="card-body p-4 pt-3">
                    <h6 class="fw-semibold fs-4">Red Valvet Dress</h6>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="fw-semibold fs-4 mb-0">$150 <span
                                class="fw-normal text-muted fs-3 ms-2"><del>$200</del></span></h6>
                        <ul class="list-unstyled d-flex align-items-center mb-0">
                            <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                            <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                            <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                            <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                            <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card rounded-2 overflow-hidden">
                <div class="position-relative">
                    <a href="javascript:void(0)"><img src="{{ asset('assets/template/assets/images/products/s11.jpg') }}"
                            class="card-img-top rounded-0" alt="..."></a>
                    <a href="javascript:void(0)"
                        class="bg-primary rounded-circle d-inline-flex position-absolute mb-n3 bottom-0 end-0 me-3 p-2 text-white"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                            class="ti ti-basket fs-4"></i></a>
                </div>
                <div class="card-body p-4 pt-3">
                    <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="fw-semibold fs-4 mb-0">$285 <span
                                class="fw-normal text-muted fs-3 ms-2"><del>$345</del></span></h6>
                        <ul class="list-unstyled d-flex align-items-center mb-0">
                            <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                            <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                            <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                            <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                            <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
