# notification
通知

### 数据结构

```json


{
    nid: { type: String, unique: true },
    sender_id: { type: Number },
    receiver_id : { type: Number , index: true},
    created_at: { type: Number, default: Date.now },
    verb: { type: String },
    template: { type: String },
    is_read: { type: String, index: true, default: N },
    is_pending: { type: String, index: true, default: N },
    filter: {
        ftype: { type: String }
    },
    
    data: {
        entity: { type: Entity },
        source: { type: Entity },
        target: { type: Entity }
    }
}



```

