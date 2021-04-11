<?php

class __Mustache_d17e474c71febaa65dcb6f75c14c76e1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="forumsearch">
';
        $buffer .= $indent . '    <form action="';
        $value = $this->resolveValue($context->find('actionurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" style="display: inline;">
';
        $buffer .= $indent . '        <fieldset class="invisiblefieldset">
';
        // 'helpicon' section
        $value = $context->find('helpicon');
        $buffer .= $this->section2729f8701c7613ee81710a969814c747($context, $indent, $value);
        $buffer .= $indent . '            <input type="hidden" name="id" value="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <label class="accesshide" for="search">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section1a178f26535a27989574fb9606df432b($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '            <input id="search" name="search" type="text" size="18" value="';
        $value = $this->resolveValue($context->find('query'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <label class="accesshide" for="searchforums">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD33fb2ef29917c48f6f14cb496c105ca($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '            <input id="searchforums" type="submit" class="btn btn-secondary" value=';
        // 'quote' section
        $value = $context->find('quote');
        $buffer .= $this->section8e49326798adaaa71827b88f44f32c4c($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '        </fieldset>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2729f8701c7613ee81710a969814c747(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{>core/help_icon}}
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a178f26535a27989574fb9606df432b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'search, hsuforum';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'search, hsuforum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD33fb2ef29917c48f6f14cb496c105ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchforums, hsuforum';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchforums, hsuforum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e49326798adaaa71827b88f44f32c4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}searchforums, hsuforum{{/str}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD33fb2ef29917c48f6f14cb496c105ca($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
