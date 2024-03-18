<?php

namespace App\Livewire;

use App\Models\Seat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use function Laravel\Prompts\alert;

class DashboardLivewire extends Component
{

    public $seats, $seat;

    public function render()
    {
        

        return view('livewire.dashboard-livewire');
    }

    public function seatSelect($seats)
    {
        dd($seats);
        $validity = Seat::where('seat_number', $seats)->where('user_id', auth()->user()->id)->count();


            $SelectedSeat = new Seat();

            $SelectedSeat->user_id = auth()->user()->id;

            $SelectedSeat->seat_number = $seats;

            if ($validity == 2) {
                return;
            } else {
                $SelectedSeat->save();

                session()->flash('message', 'You have successfully choosen your seat thank you');
            }


        }
    }

