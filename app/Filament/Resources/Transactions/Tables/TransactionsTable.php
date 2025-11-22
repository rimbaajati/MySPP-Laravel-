<?php

namespace App\Filament\Resources\Transactions\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\EditAction;  // Tambahkan ini

class TransactionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('code')
                    ->label('Code')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('user.name')
                    ->label('User')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('payment_method')
                    ->label('Payment Method'),

                TextColumn::make('payment_status')
                    ->label('Payment Status')
                    ->badge()
                    ->colors([
                        'warning' => 'PENDING',
                        'success' => 'PAID',
                    ]),

                ImageColumn::make('payment_proof')
                    ->label('Bukti Pembayaran')
                    ->size(50),

                TextColumn::make('departement.name')
                    ->label('Departement'),

                TextColumn::make('departement.cost')
                    ->label('Cost')
                    ->money('IDR'),
            ])

            ->actions([
                EditAction::make(),  // Ubah dari Tables\Actions\EditAction::make()
            ]);
    }
}