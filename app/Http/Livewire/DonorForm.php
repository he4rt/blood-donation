<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class DonorForm extends Component implements HasForms
{
    use InteractsWithForms;

    public array $donation = [
        'name' => 'Daniel',
        'content' => ''
    ];
    public function render()
    {
        return view('livewire.donor-form');
    }

    public function mount()
    {
        $this->form->fill($this->donation);
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
                ->required(),
            Forms\Components\MarkdownEditor::make('content'),
        ];
    }

    public function submit(): void
    {
        dd($this->fill->getState());
    }

    public function getFormStatePath(): string
    {
        return 'donation';
    }
}
