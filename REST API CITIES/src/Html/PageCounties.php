<?php

static function table(array $entities)
{
    echo '<h1>Megyék</h1>';
    self::searchBar();
    echo '<table id="counties-table">';
    self::tableHead();
    self::tableBody($entities);
    echo "</table>";
}

static function tableHead()
{
    echo '<thead>
    <tr>
        <th class="id-col">#</th>
        <th>Megnevezés</th>
        <th style="float: right; display: flex">
            Művelet&nbsp;
            <button></button>
    
    
    
    '
}

static function editor()
{
    echo '
            <th>&nbsp;</th>
            <th>   
                <form name="county-editor" method="post" action="">
                <input type="hidden" id="id" name="id">
                <input type="search" id="name" name="name" placeholder="Megye" required>
                <button type="submit" id="btn-save-county" name="btn-save-county" title="Ment"><i class="fa fa-save"></i>
                </button>
                <button type="button" id="btn-cancel-county" title="Mégse"><i class="fa fa-cancel"></i></button>
                </form>
                </th>
    
    '
}

