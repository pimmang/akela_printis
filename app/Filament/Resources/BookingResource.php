<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\ToggleButtons;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $slug = 'booking-diskon-list';
    // protected ?string $heading = 'Booking Diskon List';
    protected static ?string $navigationLabel = 'Booking Diskon List';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                ToggleButtons::make('status')
                    ->inline()
                    ->options([
                        "1" => "Terpakai",
                        "0" => "Belum Terpakai",
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
                TextColumn::make('nama'),
                TextColumn::make('nomor_telepon')
                    ->searchable(),
                TextColumn::make('event.nama_event')
                    ->label('Nama Event'),
                TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(fn(string $state): string => $state === "1" ? "Terpakai" : "Belum Terpakai")
                    ->icon(fn(string $state): string => $state === "1" ? 'heroicon-o-check-circle' : 'heroicon-o-x-circle')
                    ->color(fn(string $state): string => $state === "1" ? 'success' : 'danger')

            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([

                Tables\Actions\DeleteBulkAction::make(),
                BulkAction::make('Sudah Terpakai')
                    ->label('Sudah Terpakai')
                    ->icon('heroicon-o-check-circle') // Ikon untuk aksi bulk
                    ->requiresConfirmation() // Konfirmasi sebelum eksekusi
                    ->action(function (Collection $records) {
                        foreach ($records as $record) {
                            $record->update([
                                'status' => $record->status === "0" ? "1" : "1",
                            ]);
                        }

                        Notification::make()
                            ->title('Status berhasil diperbarui!')
                            ->success()
                            ->send();
                    }),
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
