<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">



                    <form>


                        <fieldset>
                            <legend style="color: gray">Chimwaga hall:</legend>

                            <span style="position: relative;left:50%;font-size:50px;color:gray"><i class="fa-solid fa-chalkboard"></i></span>
                            @if (session()->has('message'))
                                <div role="alert" class="alert alert-success alert-dismissible fade show">
                                    <strong>{{ session('message') }}</strong>
                                    <button class="btn btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif
                            <div class="container" style="text-align: center;">

                                @php
                                    $rowCounter = 1;
                                @endphp

                                @for ($seats = 1; $seats <= 2000; $seats++)



                                    @if ($rowCounter <= 40 && $rowCounter > 1)
                                        @if ($seats % 14 == 1)
                                            <br><br>
                                            @php
                                                $rowCounter++;
                                            @endphp
                                        @endif
                                    @elseif ($rowCounter <= 80)
                                        @if ($seats % 22 == 1)
                                            <br><br>
                                            @php
                                                $rowCounter++;
                                            @endphp
                                        @endif
                                    @elseif ($rowCounter <= 160)
                                        @if ($seats % 14 == 1)
                                            <br><br>
                                            @php
                                                $rowCounter++;
                                            @endphp
                                        @endif
                                    @elseif ($rowCounter <= 240)
                                        @if ($seats % 25 == 1)
                                            <br><br>
                                            @php
                                                $rowCounter++;
                                            @endphp
                                        @endif
                                    @elseif ($rowCounter <= 360)
                                        @if ($seats % 30 == 1)
                                            <br><br>
                                            @php
                                                $rowCounter++;
                                            @endphp
                                        @endif

                                        @elseif ($rowCounter <= 450)
                                        @if ($seats % 26 == 1)
                                            <br><br>
                                            @php
                                                $rowCounter++;
                                            @endphp
                                        @endif

                                        @elseif ($rowCounter <= 540)
                                        @if ($seats % 28 == 1)
                                            <br><br>
                                            @php
                                                $rowCounter++;
                                            @endphp
                                        @endif

                                        @elseif ($rowCounter <= 630)
                                        @if ($seats % 34 == 1)
                                            <br><br>
                                            @php
                                                $rowCounter++;
                                            @endphp
                                        @endif

                                        @elseif ($rowCounter <= 720)
                                        @if ($seats % 14 == 1)
                                            <br><br>
                                            @php
                                                $rowCounter++;
                                            @endphp
                                        @endif
                                    @endif


                                    <button style="font-size: 20px;color:gray;border:black;"
                                        wire:click = "seatSelect({{ $seats }})" wire:model = 'seat'
                                        onclick="confirm(`Are you sure you want to reserve this @if ($seats == 2) {{ $seats }}nd @elseif($seats == 3) {{ $seats }}rd @else {{ $seats }}th @endif seat for graduation ? `) || event.stopImmediatePropagation()"><i
                                            class="fas fa-couch"></i></button>

                                    @error('seat')
                                        <small class="text-red">{{ $message }}</small>
                                    @enderror
                                    <span
                                        style="font-size: 10px;position:relative;top:20px;left:-30px;font-weight:bold">{{ $seats }}</span>
                                @endfor
                            </div>


                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
