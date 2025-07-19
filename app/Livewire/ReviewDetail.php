<?php

namespace App\Livewire;

use Livewire\Component;

class ReviewDetail extends Component
{
    public $reviewId;
    
    public function mount($reviewId = null)
    {
        $this->reviewId = $reviewId ?? 1; // Default to review ID 1 for demo
    }
    
    public function render()
    {
        return view('livewire.review-detail');
    }
}
