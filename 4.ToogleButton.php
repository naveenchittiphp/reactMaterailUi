Toogle buttons can be used to group related options.
This time we have access to the selected state of button group which can be utilized within the component.

Let say we have a editor in our app it contains options for bold italic 
To impleementthat we import two buttons 

mui button.tsx and 

Icons will be the contants for the three buttons 

<Stack  direction="row">
            <ToggleButtonGroup aria-label="text formating">
                <ToggleButton value="bold" aria-label="bold">
                    <FormatBoldIcon />
                </ToggleButton>
                <ToggleButton value="italic" aria-label="italic">
                    <FormatItalicIcon />
                </ToggleButton>
                <ToggleButton value="underlined" aria-label="underlined">
                    <FormatUnderlinedIcon />
                </ToggleButton>
            </ToggleButtonGroup>
        </Stack>

for each component we have to define the value and aria-label 
we can place icons inthem.

Add UseState:
------------

we can access the buttons by the usestate 

 const [formats,setFormats] = useState<string[]>([]);
   
   define a usstate varible formats and add a function "setFormats" to assign the value to the formats 
   
   formats is type of string array and add initial value [].
   
   
