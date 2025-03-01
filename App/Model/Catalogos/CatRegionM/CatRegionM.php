<?php
class catalogoRegion
{
    public function listarByAll()
    {
        $listado = pg_query("SELECT id_cat_region, clave_region, region
                             FROM cat_region
                             ORDER BY region ASC");
        return $listado;
    }

    public function obtenerElemetoById($idObject)
    {
        $listado = pg_query("SELECT id_cat_region, CONCAT(clave_region, ' - ', region)
                             FROM cat_region
                             WHERE id_cat_region = $idObject");
        return $listado;
    }

    public function idRegionByText($region)
    {
        $listado = pg_query("SELECT id_cat_region
                             FROM cat_region
                             WHERE TRIM(UPPER(UNACCENT(region))) 
                                LIKE TRIM(UPPER(UNACCENT('%$region%')));");
        return $listado;
    }

    public function listarByAllv2()
    {
        $query = pg_query("SELECT 
                                public.cat_region.id_cat_region,
                                UPPER(public.cat_region.region)
                            FROM public.cat_region
                            ORDER BY public.cat_region.region ASC;");
        return $query;
    }

    public function listarByEditv2($id)
    {
        $query = pg_query("SELECT 
                                public.cat_region.id_cat_region,
                                UPPER(public.cat_region.region)
                            FROM public.cat_region
                            WHERE public.cat_region.id_cat_region = $id;");
        return $query;
    }
}
