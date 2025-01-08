<?php

if (class_exists('ParagonIE_Sodium_Core_Curve25519_Ge_P2', false)) {
    return;
}

/**
 * Class ParagonIE_Sodium_Core_Curve25519_Ge_P2
 */
class ParagonIE_Sodium_Core_Curve25519_Ge_P2
{
    /**
     * @var ParagonIE_Sodium_Core_Curve25519_Fe
     */
    public $X;

    /**
     * @var ParagonIE_Sodium_Core_Curve25519_Fe
     */
    public $Y;

    /**
     * @var ParagonIE_Sodium_Core_Curve25519_Fe
     */
    public $Z;

    /**
     * ParagonIE_Sodium_Core_Curve25519_Ge_P2 constructor.
     *
     * @internal You should not use this directly from another application
     *
     * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $x
     * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $y
     * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $z
     */
    public function __construct(
<<<<<<< HEAD
        ParagonIE_Sodium_Core_Curve25519_Fe $x = null,
        ParagonIE_Sodium_Core_Curve25519_Fe $y = null,
        ParagonIE_Sodium_Core_Curve25519_Fe $z = null
=======
        $x = null,
        $y = null,
        $z = null
>>>>>>> bb56ea5 (projet final)
    ) {
        if ($x === null) {
            $x = new ParagonIE_Sodium_Core_Curve25519_Fe();
        }
<<<<<<< HEAD
=======
        if (!($x instanceof ParagonIE_Sodium_Core_Curve25519_Fe)) {
            throw new TypeError('Argument 1 must be an instance of ParagonIE_Sodium_Core_Curve25519_Fe');
        }
>>>>>>> bb56ea5 (projet final)
        $this->X = $x;
        if ($y === null) {
            $y = new ParagonIE_Sodium_Core_Curve25519_Fe();
        }
<<<<<<< HEAD
=======
        if (!($y instanceof ParagonIE_Sodium_Core_Curve25519_Fe)) {
            throw new TypeError('Argument 2 must be an instance of ParagonIE_Sodium_Core_Curve25519_Fe');
        }
>>>>>>> bb56ea5 (projet final)
        $this->Y = $y;
        if ($z === null) {
            $z = new ParagonIE_Sodium_Core_Curve25519_Fe();
        }
<<<<<<< HEAD
=======
        if (!($z instanceof ParagonIE_Sodium_Core_Curve25519_Fe)) {
            throw new TypeError('Argument 3 must be an instance of ParagonIE_Sodium_Core_Curve25519_Fe');
        }
>>>>>>> bb56ea5 (projet final)
        $this->Z = $z;
    }
}
