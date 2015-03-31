# DEPRECATED IN VERSION 1.11.0 #

# Introduction #
JANUS supplies different ways of exporting metadata. On entity level and on federation level.

# Entity export #
In the edit entity view, you can hit the Export tab and click the Export matadata link. This will export the metadata to either the screen or as XML.

| **Parameter** | Value | **Required** |
|:--------------|:------|:-------------|
| eid | _int_ | Yes |
| revisionid | _int_ | Yes |
| output | 'xhtml' | No |

# Federation export #
In dashboard view, hit the Federation tab oand click the link. This interface allows you to export federation metadata accordint to entity type and current workflow state. It is also possible to select the appropriate mimetype and to select an extern exporter function.

**NOTE** the exporter will halt on errors, making the exporter not fit for automatic aggragating of metadata.

# Metadata aggregator #
The metadata aggregator should be used to automatically aggregate metadata for remote consumption. The aggragator must be called with an id that matches the appropriate aggregator configuration in the configuration file.
```
'aggregators' => array(
    'prod-sp' => array(
        'state' => 'prodaccepted',
        'type' => 'saml20-sp',
    ),
    'prod-idp' => array(
        'state' => 'prodaccepted',
        'type' => 'saml20-idp',
    ),
),
```
The aggregator can only export on entitytype, so metadata containing both SP's and IdP's can not be done.

**NOTE** that the aggragator will skip entities that contain errors.