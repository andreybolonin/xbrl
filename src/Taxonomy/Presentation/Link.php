<?php

namespace adrianclay\xbrl\Taxonomy\Presentation;

use adrianclay\xbrl\Taxonomy\ArcCollection;

class Link extends ArcCollection
{
    /**
     * @return Arc[]
     */
    protected function getArcs()
    {
        $arcs = [];
        $results = $this->element->getElementsByTagNameNS('http://www.xbrl.org/2003/linkbase', 'presentationArc');
        foreach ($results as $result) {
            $arcs[] = new Arc($this, $result);
        }

        return $arcs;
    }
}
