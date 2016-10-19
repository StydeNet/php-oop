<?php

trait CanPerformBasicActions
{
    public function move()
    {
        echo "<p>Caminó</p>";
    }
}

trait CanShootArrows
{
    public function shootArrow()
    {
        echo "<p>Disparó una flecha</p>";
    }

    abstract public function getArrows();
}

trait CanRide 
{
    public function move()
    {
        echo "<p>Cabalgó</p>";
    }
}

class Knight
{
    use CanRide;
}

class Archer
{
    use CanShootArrows;

    public function getArrows()
    {
        return 30;
    }
}

class MountedArcher
{
    use CanRide;

    use CanShootArrows;

    public function getArrows()
    {
        return 100;
    }
}

$mountedArcher = new MountedArcher;

$mountedArcher->shootArrow();

echo "<p>{$mountedArcher->getArrows()}</p>";





