<?php

namespace App\Filament\Resources\Players\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PlayerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('gender'),
                TextInput::make('display_name'),
                TextInput::make('portrait'),
                TextInput::make('alt_photo_1'),
                TextInput::make('alt_photo_2'),
            ]);
    }
}
