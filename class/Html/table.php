<?php

namespace Html;

class Table
{
    protected string $title;
    protected string $tableHeader;
    protected string $tableData;

    public function setTitle(string $title): void
    {
        $this->title = "<h3>$title</h3>";
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTableHeader(...$data): void
    {
        $table_header= "<tr>";
        foreach($data as $item){
            $table_header .= "<th>$item</th>";
        }

        $table_header.= "</tr>";

        $this->tableHeader = $table_header;
    }

    public function getTableHeader(): string
    {
        return $this->tableHeader;
    }

    public function setRowData(array $data): void
    {
        $table_data="";

        foreach ($data as $row){
            $table_data .= "<tr>";

            foreach ($row as $item){
                $table_data .= "<td>$item</td>";
            }

            $table_data .= "</tr>";
        }

        $this->tableData = $table_data;
    }

    public function getRowData():string
    {
        return $this->tableData;
    }
}


?>