# jQuery DataTables 1.9.4

This module adds the great jQuery DataTables plugin for use in ProcessWire. You can load the module in the admin from any of your module using:

```
$this->modules->JqueryDataTables;
```

This will load the module and add CSS and Javascript from DataTables. This mostly would be used by a custom admin Process module.

Note: Loading this module will just attach the necessary files to the admin. To use it you would need to add your own jQuery scripts and init the DataTables with something like.

```
$("#mytable").dataTable();
```

## License

See /DataTables/license-bsd.txt and /DataTables/license-gpl2.txt

http://datatables.net