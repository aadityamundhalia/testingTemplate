<?php

namespace App\DataTables;

use App\Web;
use Yajra\DataTables\Services\DataTable;

class WebTablesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)->addColumn('action', 'data');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Web $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Web $model)
    {
        return $model->newQuery()->select('id', 'developer', 'date', 'client', 'created_at', 'updated_at');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->addAction(['width' => '80px'])
                    ->parameters([
                        'dom'          => 'Bfrtip',
                        "pageLength" =>  15,
                        'buttons'      => ['export', 'print', 'reset', 'reload'],
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            'developer',
            'date',
            'client',
            'created_at',
            'updated_at'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'WebTables_' . date('YmdHis');
    }
}
