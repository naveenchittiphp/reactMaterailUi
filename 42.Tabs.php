Create  a new component for the tab 

import * as React from 'react';
import Box from '@mui/material/Box';

export default function LatestNews() {
  
  return (<>
  <Box>

  </Box>
  </>);
}


Now place the box component in it 
we will place all our tab content inside it.

We can make the tab pannel by mui core and mui lab 
mui lab will provide more options 

for creating the mui lab we have to import componnets from mui lab 

import {TabContext,TabList,TabPannel} from '@mui/lab';


Now add the tableContext component and add box inside it 


<TabContext>
      <Box sx={{ borderBottom:1,borderColor:'divider'}}>
        <TabList aria-label='Latest News'>
          <Tab label="Tab One" value="1" />

          </Tab>
          <Tab label="Tab Two" value="2" />

          </Tab>
          <Tab label="Tab Three" value="3" />

          </Tab>
        </TabList> 
      </Box>
    </TabContext>

Now inside the tab list add the tab.
for the tab we have to define the label and value it doesnot have end tag 

Now for the content we hav to add tabPannel tag 
