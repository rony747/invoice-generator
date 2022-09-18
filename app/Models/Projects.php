<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
  protected $table = 'projects';
  protected $fillable = [
    'project_name',
    'services',
    'today_date',
    'start_date',
    'rate',
    'rate_seo',
    'rate_hosting',
    'rate_hosting_ecommerce',
    'due',
    'company_name',
    'first_name',
    'last_name',
    'address',
    'city',
    'state',
    'zip',
    'phone',
    'fax',
    'email',
    'website',
    'scope_intro',
    'scope_methodology',
    'resources_intro',
    'getting_intro',
    'getting_signature',
    'agreement_intro',
    'agreement_contact',
    'agreement_general',
    'agreement_other'
  ];
}
