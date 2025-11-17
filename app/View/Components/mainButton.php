<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class mainButton extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $to = null,
        public ?string $type = 'button',
        public string $dataLabel = '',
        public string $variant = 'primary',
        public string $size = 'sm',
        public bool $asLink = false,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.main-button');
    }
}
