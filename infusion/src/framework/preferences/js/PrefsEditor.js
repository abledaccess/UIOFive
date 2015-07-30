var fluid_2_0=fluid_2_0||{};!function($,fluid){"use strict";fluid.defaults("fluid.prefs.prefsEditorLoader",{gradeNames:["fluid.viewRelayComponent","fluid.prefs.settingsGetter","fluid.prefs.initialModel","autoInit"],defaultLocale:"en",members:{settings:{expander:{funcName:"fluid.prefs.prefsEditorLoader.getCompleteSettings",args:["{that}.initialModel","{that}.getSettings"]}}},components:{prefsEditor:{priority:"last",type:"fluid.prefs.prefsEditor",createOnEvent:"onCreatePrefsEditorReady",options:{members:{initialModel:"{prefsEditorLoader}.initialModel"},invokers:{getSettings:"{prefsEditorLoader}.getSettings"}}},templateLoader:{type:"fluid.prefs.resourceLoader",options:{events:{onResourcesLoaded:"{prefsEditorLoader}.events.onPrefsEditorTemplatesLoaded"}}},messageLoader:{type:"fluid.prefs.resourceLoader",options:{defaultLocale:"{prefsEditorLoader}.options.defaultLocale",locale:"{prefsEditorLoader}.settings.locale",resourceOptions:{dataType:"json"},events:{onResourcesLoaded:"{prefsEditorLoader}.events.onPrefsEditorMessagesLoaded"}}}},events:{onPrefsEditorTemplatesLoaded:null,onPrefsEditorMessagesLoaded:null,onCreatePrefsEditorReady:{events:{templateLoaded:"onPrefsEditorTemplatesLoaded",prefsEditorMessagesLoaded:"onPrefsEditorMessagesLoaded"}}},distributeOptions:[{source:"{that}.options.templateLoader",removeSource:!0,target:"{that > templateLoader}.options"},{source:"{that}.options.messageLoader",removeSource:!0,target:"{that > messageLoader}.options"},{source:"{that}.options.terms",target:"{that > templateLoader}.options.terms"},{source:"{that}.options.terms",target:"{that > messageLoader}.options.terms"},{source:"{that}.options.prefsEditor",removeSource:!0,target:"{that > prefsEditor}.options"}]}),fluid.prefs.prefsEditorLoader.getCompleteSettings=function(initialModel,getSettingsFunc){var savedSettings=getSettingsFunc();return $.extend(!0,{},initialModel,savedSettings)},fluid.defaults("fluid.prefs.transformDefaultPanelsOptions",{gradeNames:["fluid.viewRelayComponent","autoInit"],distributeOptions:[{source:"{that}.options.textSize",removeSource:!0,target:"{that textSize}.options"},{source:"{that}.options.lineSpace",removeSource:!0,target:"{that lineSpace}.options"},{source:"{that}.options.textFont",removeSource:!0,target:"{that textFont}.options"},{source:"{that}.options.contrast",removeSource:!0,target:"{that contrast}.options"},{source:"{that}.options.layoutControls",removeSource:!0,target:"{that layoutControls}.options"},{source:"{that}.options.linksControls",removeSource:!0,target:"{that linksControls}.options"}]}),fluid.defaults("fluid.prefs.resourceLoader",{gradeNames:["fluid.eventedComponent","autoInit"],listeners:{"onCreate.loadResources":{listener:"fluid.prefs.resourceLoader.loadResources",args:["{that}",{expander:{func:"{that}.resolveResources"}}]}},defaultLocale:null,locale:null,terms:{},resources:{},resourceOptions:{},invokers:{transformURL:{funcName:"fluid.stringTemplate",args:["{arguments}.0","{that}.options.terms"]},resolveResources:{funcName:"fluid.prefs.resourceLoader.resolveResources",args:"{that}"}},events:{onResourcesLoaded:null}}),fluid.prefs.resourceLoader.resolveResources=function(that){var mapped=fluid.transform(that.options.resources,that.transformURL);return fluid.transform(mapped,function(url){var resourceSpec={url:url,forceCache:!0,options:that.options.resourceOptions};return $.extend(resourceSpec,fluid.filterKeys(that.options,["defaultLocale","locale"]))})},fluid.prefs.resourceLoader.loadResources=function(that,resources){fluid.fetchResources(resources,function(){that.resources=resources,that.events.onResourcesLoaded.fire(resources)})},fluid.defaults("fluid.prefs.settingsGetter",{gradeNames:["fluid.littleComponent","autoInit"],members:{getSettings:"{settingsStore}.get"}}),fluid.defaults("fluid.prefs.settingsSetter",{gradeNames:["fluid.littleComponent","autoInit"],invokers:{setSettings:{funcName:"fluid.prefs.settingsSetter.setSettings",args:["{arguments}.0","{settingsStore}.set"]}}}),fluid.prefs.settingsSetter.setSettings=function(model,set){var userSettings=fluid.copy(model);set(userSettings)},fluid.defaults("fluid.prefs.uiEnhancerRelay",{gradeNames:["autoInit","fluid.modelRelayComponent"],listeners:{onCreate:"{that}.addListener",onDestroy:"{that}.removeListener"},events:{updateEnhancerModel:"{fluid.prefs.prefsEditor}.events.onUpdateEnhancerModel"},invokers:{addListener:{funcName:"fluid.prefs.uiEnhancerRelay.addListener",args:["{that}.events.updateEnhancerModel","{that}.updateEnhancerModel"]},removeListener:{funcName:"fluid.prefs.uiEnhancerRelay.removeListener",args:["{that}.events.updateEnhancerModel","{that}.updateEnhancerModel"]},updateEnhancerModel:{funcName:"fluid.prefs.uiEnhancerRelay.updateEnhancerModel",args:["{uiEnhancer}","{fluid.prefs.prefsEditor}.model"]}}}),fluid.prefs.uiEnhancerRelay.addListener=function(modelChanged,listener){modelChanged.addListener(listener)},fluid.prefs.uiEnhancerRelay.removeListener=function(modelChanged,listener){modelChanged.removeListener(listener)},fluid.prefs.uiEnhancerRelay.updateEnhancerModel=function(uiEnhancer,newModel){uiEnhancer.updateModel(newModel)},fluid.defaults("fluid.prefs.prefsEditor",{gradeNames:["fluid.viewRelayComponent","fluid.prefs.settingsSetter","autoInit"],invokers:{fetch:{funcName:"fluid.prefs.prefsEditor.fetch",args:["{that}"]},applyChanges:{funcName:"fluid.prefs.prefsEditor.applyChanges",args:["{that}"]},save:{funcName:"fluid.prefs.prefsEditor.save",args:["{that}"]},saveAndApply:{funcName:"fluid.prefs.prefsEditor.saveAndApply",args:["{that}"]},reset:{funcName:"fluid.prefs.prefsEditor.reset",args:["{that}"]},cancel:{funcName:"fluid.prefs.prefsEditor.cancel",args:["{that}"]}},selectors:{cancel:".flc-prefsEditor-cancel",reset:".flc-prefsEditor-reset",save:".flc-prefsEditor-save",previewFrame:".flc-prefsEditor-preview-frame"},events:{onSave:null,onCancel:null,onReset:null,onAutoSave:null,modelChanged:null,onPrefsEditorRefresh:null,onUpdateEnhancerModel:null,onPrefsEditorMarkupReady:null,onReady:null},listeners:{onCreate:"fluid.prefs.prefsEditor.init",onAutoSave:"{that}.save"},modelListeners:{"":[{listener:"fluid.prefs.prefsEditor.handleAutoSave",args:["{that}"]},{listener:"{that}.events.modelChanged.fire",args:["{change}.value"]}]},resources:{template:"{templateLoader}.resources.prefsEditor"},autoSave:!1}),fluid.prefs.prefsEditor.applyChanges=function(that){that.events.onUpdateEnhancerModel.fire()},fluid.prefs.prefsEditor.fetch=function(that){var completeModel=that.getSettings();completeModel=$.extend(!0,{},that.initialModel,completeModel),that.applier.change("",completeModel),that.events.onPrefsEditorRefresh.fire(),that.applyChanges()},fluid.prefs.prefsEditor.save=function(that){var savedSelections=fluid.copy(that.model);fluid.each(savedSelections,function(value,key){fluid.get(that.initialModel,key)===value&&delete savedSelections[key]}),that.events.onSave.fire(savedSelections),that.setSettings(savedSelections)},fluid.prefs.prefsEditor.saveAndApply=function(that){that.save(),that.events.onPrefsEditorRefresh.fire(),that.applyChanges()},fluid.prefs.prefsEditor.reset=function(that){that.applier.change("",fluid.copy(that.initialModel)),that.events.onPrefsEditorRefresh.fire(),that.events.onReset.fire(that)},fluid.prefs.prefsEditor.cancel=function(that){that.events.onCancel.fire(),that.fetch()},fluid.prefs.prefsEditor.finishInit=function(that){var bindHandlers=function(that){var saveButton=that.locate("save");if(saveButton.length>0){saveButton.click(that.saveAndApply);var form=fluid.findForm(saveButton);$(form).submit(function(){that.saveAndApply()})}that.locate("reset").click(that.reset),that.locate("cancel").click(that.cancel)};that.container.append(that.options.resources.template.resourceText),bindHandlers(that),that.events.onPrefsEditorMarkupReady.fire(that),that.fetch(),that.events.onReady.fire(that)},fluid.prefs.prefsEditor.handleAutoSave=function(that){that.options.autoSave&&that.events.onAutoSave.fire()},fluid.prefs.prefsEditor.init=function(that){setTimeout(function(){fluid.isDestroyed(that)||fluid.prefs.prefsEditor.finishInit(that)},1)},fluid.defaults("fluid.prefs.preview",{gradeNames:["fluid.viewRelayComponent","autoInit"],components:{enhancer:{type:"fluid.uiEnhancer",container:"{preview}.enhancerContainer",createOnEvent:"onReady"},templateLoader:"{templateLoader}"},invokers:{updateModel:{funcName:"fluid.prefs.preview.updateModel",args:["{preview}","{prefsEditor}.model"]}},finalInitFunction:"fluid.prefs.preview.finalInit",events:{onReady:null},listeners:{"{prefsEditor}.events.modelChanged":"{that}.updateModel",onReady:"{that}.updateModel"},templateUrl:"%prefix/PrefsEditorPreview.html"}),fluid.prefs.preview.updateModel=function(that,model){setTimeout(function(){that.enhancer&&that.enhancer.updateModel(model)},0)},fluid.prefs.preview.finalInit=function(that){var templateUrl=that.templateLoader.transformURL(that.options.templateUrl);that.container.load(function(){that.enhancerContainer=$("body",that.container.contents()),that.events.onReady.fire()}),that.container.attr("src",templateUrl)}}(jQuery,fluid_2_0);