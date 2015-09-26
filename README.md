# Build A CMS With Codeigniter
This is the source code for the Tutsplus course Build A CMS With Codeigniter.

Note that it uses Codeigniter version 2.1.2. The code is not fully compatible anymore.

## Know issues
### Bugfixes 
There were a few bug fixes, amongst which an issue where an empty password was saved into the database. See commits for those fixes.

## $this->db->ar_orderby has become obsolete in Codeigniter V3
application/core/MY_Model.php uses a hack using this code to add order by statements:
```
if (!count($this->db->ar_orderby)) {
    $this->db->order_by($this->_order_by);
}
```

In Codeigniter V3, $this->db->ar_orderby has been replaced by $this->db->qb_orderby, which has become a protected property. 
You cannot use it anymore. However, $this->db->order_by now adds to order by instead of replace it.
So for V3 you should be fine doing:
```
$this->db->order_by($this->_order_by);
```
