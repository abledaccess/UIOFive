var fluid_2_0=fluid_2_0||{};!function($,fluid){"use strict";fluid.prefs.builder({gradeNames:["fluid.prefs.auxSchema.starter"]}),fluid.defaults("fluid.uiOptions.prefsEditor",{gradeNames:["fluid.prefs.constructed.prefsEditor","autoInit"],distributeOptions:[{source:"{that}.options.tocTemplate",target:"{that uiEnhancer}.options.tocTemplate"},{source:"{that}.options.ignoreForToC",target:"{that uiEnhancer}.options.ignoreForToC"}],enhancer:{distributeOptions:[{source:"{that}.options.tocTemplate",target:"{that > fluid.prefs.enactor.tableOfContents}.options.tocTemplate"},{source:"{that}.options.ignoreForToC",target:"{that > fluid.prefs.enactor.tableOfContents}.options.ignoreForToC"}]}})}(jQuery,fluid_2_0);