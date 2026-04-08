<?php

namespace App;

enum UserRole :string
{
    case CLIENT = 'client';
   case PRESTATAIRE = 'prestataire' ;
   case ADMIN = 'admin' ;
}
