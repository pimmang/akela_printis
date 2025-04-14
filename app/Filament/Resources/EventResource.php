<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-numbered-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_event')
                    ->required(),
                TextInput::make('diskon')
                    ->numeric()
                    ->required(),
                DateTimePicker::make('event_berakhir_at')
                    ->required(),
                ToggleButtons::make('aktif')
                    ->label('Status')
                    ->inline()
                    ->options([
                        "1" => "Aktif",
                        "0" => "Selesai",
                    ])
                    ->colors([
                        "1" => "success",
                        "0" => "danger",
                    ])
                    ->icons([
                        "1" => "heroicon-o-check-circle",
                        "0" => "heroicon-o-x-circle",
                    ])
                    ->required()


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_event'),
                TextColumn::make('diskon'),
                TextColumn::make('event_berakhir_at'),
                TextColumn::make('aktif')
                    ->label('Status')
                    ->formatStateUsing(fn(string $state): string => $state === "1" ? "Aktif" : "Selesai")
                    ->icon(fn(string $state): string => $state === "1" ? 'heroicon-o-check-circle' : 'heroicon-o-x-circle')
                    ->color(fn(string $state): string => $state === "1" ? 'success' : 'danger')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
