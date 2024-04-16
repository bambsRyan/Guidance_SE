<?php

namespace App\Livewire;
use Carbon\Carbon;
use Livewire\Component;

class Calendar extends Component
{
    public $month;
    public $year;
    public $event = [];
    public $eventOnDate = [];
    public function mount()
    {
        $this->month = date('m');
        $this->year = date('Y');
    }
    public function add(){
        if ($this->month == 12){
            $this->month = 1;
            $this->year = $this->year + 1;
        }
        else{
            $this->month = $this->month + 1;
        }
    }
    public function subtract(){
        if ($this->month == 1){
            $this->month = 12;
            $this->year = $this->year - 1;
        }
        else{
            $this->month = $this->month - 1;
        }
    }
    public function getEventsProperty(){
            $this->event[]=[
                'date' => '02-29-2024',
                'title' => 'Event 2',
                'place' => 'UAC',
            ];

        return $this->event;
    }  

    public function events(String $date){
        $this->eventOnDate = [];
        foreach($this->event as $event){
            if($event['date'] == $date){
                $this->eventOnDate[] = $event;
            }
        }
    }

    public function render()
    {
        $calendar = [];
        $start = Carbon::createFromDate($this->year, $this->month,1)->format('j');
        $endDate = Carbon::createFromDate($this->year, $this->month-1,1)->endOfMonth()->format('j');
        $end = Carbon::createFromDate($this->year, $this->month,1)->startOfMonth()->format('D');
        $i = Carbon::createFromDate($this->year, $this->month,1)->endOfMonth()->format('D');
        $today = Carbon::now()->format('m-d-Y');
        if ($end == 'Sun'){
            $index = 7;
        }
        elseif ($end == 'Mon'){
            $index = 1;
        }
        elseif ($end == 'Tue'){
            $index = 2;
        }
        elseif ($end == 'Wed'){
            $index = 3;
        }
        elseif ($end == 'Thu'){
            $index = 4;
        }
        elseif ($end == 'Fri'){
            $index = 5;
        }
        elseif ($end == 'Sat'){
            $index = 6;
        }
        $index2 = $index;
        $x = intval($endDate) - ($index-1);
        while($index != 0){
            $calendar[] = [
                'day' => $x,
                'date' => Carbon::createFromDate($this->year, $this->month-1, $x)->format('m-d-Y'),
            ];
            $x = $x + 1;
            $index = $index - 1;
        }
        
        $y = Carbon::createFromDate($this->year, $this->month,1)->endOfMonth()->format('j');
        for($x = 1; $x <= intval($y); $x++){
            $calendar[] = [
                'day' => $x,
                'date' => Carbon::createFromDate($this->year, $this->month, $x)->format('m-d-Y'),
            ];
        } 
        if ($i == 'Sun'){
            if (count($calendar) <= 35){
                $id = 13;
            }
            else{
                $ind = 6;
            }
        }
        elseif ($i == 'Mon'){
            if (count($calendar) <= 35){
            $ind = 12;
            }
            else{
                $ind = 5;
            }
        }
        elseif ($i == 'Tue'){
            if (count($calendar) <= 35){
                $ind = 11;
                }
            else{
                    $ind = 4;
            }
        }       
        elseif ($i == 'Wed'){
            if (count($calendar) <= 35){
                $ind = 10;
                }
            else{
                    $ind = 3;
            }
        }   
        elseif ($i == 'Thu'){
            if (count($calendar) <= 35){
                $ind = 9;
                }
            else{
                    $ind = 2;
            }
        }
        elseif ($i == 'Fri'){
            if (count($calendar) <= 35){
                $ind = 8;
                }
            else{
                    $ind = 1;
            }
        }
        elseif ($i == 'Sat'){
            if (count($calendar) <= 35){
                $ind = 7;
                }
            else{
                $ind = 0;
            }
        }

        for ($x = 1; $x <= $ind; $x++){ 
            $calendar[] = [
                'day' => $x,
                'date' => Carbon::createFromDate($this->year, $this->month+1, $x)->format('m-d-Y'),
            ];
        }

        $chunked_calendar = [];
        for ($x = 0; $x < count($calendar); $x+=7){
            $part = array_slice($calendar, $x, 7);  
            $chunked_calendar[] = $part;
        } 


        return view('livewire.calendar', [
            'calendar1' => $chunked_calendar,
            'slate' => $index2,
            'dates' => intval($y),
            'slate2' => $ind,
            'today' => $today, 
            'events' => $this->events,
            'eventOnDate' => $this->eventOnDate,
            'index' => count($this->eventOnDate),
            'num' => 0, 
        ]);
    }
}