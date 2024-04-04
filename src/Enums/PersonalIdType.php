<?php
declare(strict_types=1);

namespace Covertier\Catalog\Enums;
enum PersonalIdType: string
{
    /* IFE Credential */
    case CI = 'CI';

    /* Drivers License */
    case DL = 'DL';

    /* Passport */
    case PP = 'PP';

    /* Professional Certificate */
    case PC = 'PC';

    /* National Military Service Card */
    case MCM = 'MCM';

    /* Consular Registration Certificate */
    case CMCC = 'CMCC';

    /* Unique Military Identity Card */
    case UMID = 'UMID';

    /* National Institute for Older Persons Affiliation Card */
    case INAPAM = 'INAPAM';

    /* IMSS Affiliation */
    case IMSS = 'IMSS';

    /* Migration Form */
    case FM = 'FM';

    /* CURP */
    case CURP = 'CURP';
}
