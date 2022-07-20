TextFIeld :
==============

This contains following attributes 

label:
------
we can define the name we want to display in text filed.

Varient : 
----------
We have mainly three types of varients.
1)Outlined
2)Filled
3)Standerd 

Size and Color Props:
--------------------
  <TextField id="outlined-basic" label="small secondary" variant="outlined" size="small" color="secondary"/>

Required :
-----------
we can add required property to form field.

  <TextField id="outlined-basic" label="small secondary" variant="outlined" size="small" color="secondary"/>

Helper Text:
-------------
We can add helper text to our text field by helperText attribute.
This will displayied bellow the field.
<TextField  helperText="Donot share password to anyone"/>

Type:
------

We will have the type property we can mention the type 
<TextField  Type="text" />
Disable Text :
-----------
We can disble the text field by disabled property 
<TextField  disabled />

Readonly:
----------


We can make the input field read only without disabling.

Adding Adorments :
------------------------
we can add adorments to the input field in prefixes and sufixes.

InputProps={{
            startAdornment: <InputAdornment position="start">$</InputAdornment>,
          }}

InputProps={{
            startAdornment: <InputAdornment position="end">$</InputAdornment>,
          }}


<TextField label="Amount" InputProps={{
            startAdornment: <InputAdornment position="start">$</InputAdornment>,
          }}/>
      <TextField  label="Weight" variant="outlined" InputProps={{
            startAdornment: <InputAdornment position="start">kg</InputAdornment>,
          }}/>

    
States :
----------

We can add states to the field by adding error 

 <TextField id="outlined-basic" label="Outlined" variant="outlined" value={value} onChange={(e) => setValue(e.target.value)}
      error={!value} helperText={!value ? "Required" : "Donot share your password"} />
