<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Livewire\Component;

class DonorForm extends Component implements HasForms
{
    use InteractsWithForms;

    public array $donation = [
        'name' => '',
        'email' => '',
        'full_address' => '',
        'job_title' => 'Developer/QA/PM',
        'social_type' => '',
        'social_url' => 'https://twitter.com/danielhe4rt'
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
                ->label('Nome e Sobrenome')
                ->string()
                ->required(),
            Forms\Components\TextInput::make('email')
                ->label('Seu Email')
                ->email()
                ->required(),
            Forms\Components\TextInput::make('full_address')
                ->label('Local de Doação')
                ->placeholder('Cachoeira Paulista - SP / BR')
                ->required(),
            Forms\Components\TextInput::make('job_title')
                ->label('Cargo/Titulo')
                ->placeholder('Desenvolvedor / Estudante')
                ->required(),
            Forms\Components\Select::make('social_type')
                ->options([
                    'twitter' => 'Twitter',
                    'instagram' => 'Instagram',
                    'github' => 'Github',
                    'none' => 'Não uso rede social'
                ]),
            Forms\Components\TextInput::make('social_url')
                ->placeholder('https://twitter.com/danielhe4rt')
                ->url(),
        ];
    }

    public function submit(): void
    {
        Notification::make()
            ->title('Obrigado pela doação!')
            ->body('Iremos revisar sua submissão e em breve estará em nosso site!')
            ->success()
            ->send();
    }

    public function getFormStatePath(): string
    {
        return 'donation';
    }
}
