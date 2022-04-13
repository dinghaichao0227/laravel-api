## 获取预约信息列表
- **接口地址：** /api/v1/advance/list
- **请求方式：** get

### 请求参数

|参数名称|类型|出现要求|描述|
|:----|:---|:---|:---|
|page|int|必填|查询开始页数|
|size|int|必填|单次获取数据量|

请求示例：

```

{
    "page": 1
    "size": 10
}

```

### 返回结果

|参数名称|类型|出现要求|描述|
|:----|:---|:------|:---|
|code|int|必返|响应码，代码定义请见“响应吗说明”|
|msg|string|必返|响应说明|
|data|object|必返|响应信息数据主体|
|&emsp;id|string|必返|预约信息ID|
|&emsp;name|string|必返|预约客户姓名|
|&emsp;phone_code|string|必返|预约客户手机号|
|&emsp;contact_time|string|必返|预约沟通时间|
|&emsp;status|string|必返|预约信息状态：0-待沟通、1-已沟通、2-待定、3-已拒绝|
|&emsp;remarks|string|必返|备注信息|
|&emsp;created_at|string|必返|预约信息创建时间|
|&emsp;updated_at|string|必返|预约信息修改时间|

示例：

```
{
    code: 200,
    msg: "响应成功",
    date: [
        {
            id: 1,
            name: "张闯",
            phone_code: "18612243416",
            contact_time: "18:00-22:00",
            status: "1",
            remarks: "男孩 出生14个月",
            created_at: "2022-04-10 22:44:22",
            updated_at: "2022-04-10 22:44:22"
        }
    ]
}
```

## 获取预约信息新增
- **接口地址：** /api/v1/advance/add
- **请求方式：** post

### 请求参数

|参数名称|类型|出现要求|描述|
|:----|:---|:---|:---|
|name|string|必填|预约客户姓名|
|phone_code|string|必填|预约客户手机号|
|contact_time|string|必填|预约沟通时间|

请求示例：

```

{
    "name": "张闯",
    "phone_code": "18612243416",
    "contact_time": "14:00-18:00"
}

```

### 返回结果

|参数名称|类型|出现要求|描述|
|:----|:---|:------|:---|
|code|int|必返|响应码，代码定义请见“响应吗说明”|
|msg|string|必返|响应说明|

示例：

```
{
    code: 200,
    msg: "预约信息新增成功",
}
```

## 响应码说明

|响应码|说明|
|:----|:---|
|200|处理成功|
|301|解析报文错误|
|302|无效调用凭证|
|303|参数不正确|
|500|系统内部错误|
|999|处理失败|
