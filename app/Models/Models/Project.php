<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Models\project
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name 项目名称
 * @property string $duty_user 项目负责人
 * @method static \Illuminate\Database\Eloquent\Builder|project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|project query()
 * @method static \Illuminate\Database\Eloquent\Builder|project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|project whereDutyUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|project whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Project extends Model
{
    use HasFactory;
}
