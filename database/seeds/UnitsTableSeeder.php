<?php

use App\Unit;
use App\User;
use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    public function run()
    {
        $user = factory(User::class)->create([]);

        $unit = Unit::create([
            'name' => 'Keeper Of Secrets',
            'move' => 14,
            'save' => 4,
            'wounds' => 14,
            'bravery' => 10,
            'is_alive' => true,
            'user_id' => $user->id,
        ]);

        $unit->abilities()->createMany([
            [
                'name' => 'Ability 1',
                'description' => 'The first ability',
                'roll' => 6,
            ],
            [
                'name' => 'Ability 2',
                'description' => 'The second ability',
                'roll' => 6,
            ],
            [
                'name' => 'Ability 3',
                'description' => 'The third ability',
                'roll' => 5,
            ]
        ]);

        $unit->commandAbilities()->createMany([
            [
                'name' => 'Command Ability 1',
                'description' => 'The first command ability',
                'roll' => 6,
            ],
            [
                'name' => 'Command Ability 2',
                'description' => 'The second command ability',
                'roll' => 6,
            ]
        ]);

        $unit->magic()->createMany([
            [
                'name' => 'Cacophonic Choir',
                'description' => 'Cacophonic Choir has a casting value of 6. If successfully cast, roll 2D6. Each enemy unit within 6" of the caster that has a Bravery characteristic of less than the roll suffers D3 mortal wounds.',
                'casting_roll' => 6,
                'unit_id' => $unit->id,
            ],
            [
                'name' => 'Arcane Bolt',
                'description' => 'Pew Pew',
                'casting_roll' => 6,
                'unit_id' => $unit->id,
            ],
            [
                'name' => 'Mystic Shield',
                'description' => 'Save save',
                'casting_roll' => 5,
                'unit_id' => $unit->id,
                ]
            ]);

        $unit->meleeWeapons()->createMany([
            [
                'name' => 'Melee Weapon 1',
                'range' => 1,
                'attacks' => 3,
                'to_hit' => 3,
                'to_wound' => 4,
                'rend' => 1,
                'damage' => 1,
                'equipped' => true,
            ],
            [
                'name' => 'Melee Weapon 2',
                'range' => 2,
                'attacks' => 4,
                'to_hit' => 4,
                'to_wound' => 4,
                'rend' => 0,
                'damage' => 1,
                'equipped' => false,
            ]
        ]);

        $unit->missileWeapons()->createMany([
            [
                'name' => 'Missile Weapon 1',
                'range' => 12,
                'attacks' => 2,
                'to_hit' => 4,
                'to_wound' => 4,
                'rend' => 1,
                'damage' => 1,
                'equipped' => true,
            ],
            [
                'name' => 'Missile Weapon 2',
                'range' => 12,
                'attacks' => 3,
                'to_hit' => 3,
                'to_wound' => 3,
                'rend' => 2,
                'damage' => 1,
                'equipped' => false,
            ]
        ]);

        $unit = Unit::create([
            'name' => 'Sleeper Of Secrets',
            'move' => 14,
            'save' => 4,
            'wounds' => 14,
            'bravery' => 10,
            'is_alive' => true,
            'user_id' => $user->id,
        ]);

        $unit->abilities()->createMany([
            [
                'name' => 'Ability 1',
                'description' => 'The first ability',
                'roll' => 6,
            ],
            [
                'name' => 'Ability 2',
                'description' => 'The second ability',
                'roll' => 6,
            ],
            [
                'name' => 'Ability 3',
                'description' => 'The third ability',
                'roll' => 5,
            ]
        ]);

        $unit->commandAbilities()->createMany([
            [
                'name' => 'Command Ability 1',
                'description' => 'The first command ability',
                'roll' => 6,
            ],
            [
                'name' => 'Command Ability 2',
                'description' => 'The second command ability',
                'roll' => 6,
            ]
        ]);

        $unit->magic()->createMany([
            [
                'name' => 'Cacophonic Choir',
                'description' => 'Cacophonic Choir has a casting value of 6. If successfully cast, roll 2D6. Each enemy unit within 6" of the caster that has a Bravery characteristic of less than the roll suffers D3 mortal wounds.',
                'casting_roll' => 6,
                'unit_id' => $unit->id,
            ],
            [
                'name' => 'Arcane Bolt',
                'description' => 'Pew Pew',
                'casting_roll' => 6,
                'unit_id' => $unit->id,
            ],
            [
                'name' => 'Mystic Shield',
                'description' => 'Save save',
                'casting_roll' => 5,
                'unit_id' => $unit->id,
                ]
            ]);

        $unit->meleeWeapons()->createMany([
            [
                'name' => 'Melee Weapon 1',
                'range' => 1,
                'attacks' => 3,
                'to_hit' => 3,
                'to_wound' => 4,
                'rend' => 1,
                'damage' => 1,
                'equipped' => true,
            ],
            [
                'name' => 'Melee Weapon 2',
                'range' => 2,
                'attacks' => 4,
                'to_hit' => 4,
                'to_wound' => 4,
                'rend' => 0,
                'damage' => 1,
                'equipped' => false,
            ]
        ]);

        $unit->missileWeapons()->createMany([
            [
                'name' => 'Missile Weapon 1',
                'range' => 12,
                'attacks' => 2,
                'to_hit' => 4,
                'to_wound' => 4,
                'rend' => 1,
                'damage' => 1,
                'equipped' => true,
            ],
            [
                'name' => 'Missile Weapon 2',
                'range' => 12,
                'attacks' => 3,
                'to_hit' => 3,
                'to_wound' => 3,
                'rend' => 2,
                'damage' => 1,
                'equipped' => false,
            ]
        ]);
    }
}
