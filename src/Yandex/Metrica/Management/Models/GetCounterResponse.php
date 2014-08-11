<?php

namespace Yandex\Metrica\Management\Models;

use Yandex\Metrica\Management\Models\Counter;

class GetCounterResponse extends ManagementModel
{

    protected $counter = null;

    protected $mappingClasses = array(
        'counter' => 'Yandex\Metrica\Management\Models\Counter'
    );

    protected $propNameMap = array(
        
    );

    /**
     * Retrieve the counter property
     *
     * @return Counter|null
     */
    public function getCounter()
    {
        return $this->counter;
    }

    /**
     * Set the counter property
     *
     * @param Counter $counter
     * @return $this
     */
    public function setCounter($counter)
    {
        $this->counter = $counter;
        return $this;
    }
}